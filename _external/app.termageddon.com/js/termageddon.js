window.addEventListener("load", function() {
    policy = document.getElementById('policy');

    var pol_key = policy.dataset.policyKey;
    var pol_extra = policy.dataset.extra ? policy.dataset.extra : '';

    var xhr = new XMLHttpRequest();

    xhr.onload = function () {
        console.log("Policy loaded!");
        policy.innerHTML = xhr.responseText;
    }

    xhr.onerror = function () {
        console.log("Error loading policy, attempting alternative retrieval");
        let reqHeader = new Headers();
        reqHeader.append('Content-Type', 'text/html');

        let initObject = {
            method: 'GET', headers: reqHeader,
        };

        var userRequest = new Request("https://policies.termageddon.com/api/policy/" + pol_key + '?' + pol_extra + '&origin='+window.location.href, initObject);

        fetch(userRequest)
            .then(function (response) {
                return response.text();
            })
            .then(function (data) {
                console.log("Policy loaded via alternative method!");
                policy.innerHTML = data;
            })
            .catch(function (err) {
                console.log("Error loading policy via alternative method");
                policy.innerHTML = "There was an error loading this policy, please <a href='https://policies.termageddon.com/api/policy/" + pol_key + '?' + pol_extra + '&origin='+window.location.href+"'>click here</a> to view it.";
            });
    }

    xhr.open("GET", "https://policies.termageddon.com/api/policy/" + pol_key + '?' + pol_extra + '&origin='+window.location.href);
    xhr.send();
}, false);
