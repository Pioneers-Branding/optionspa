import re

html = open(r'c:\Users\GC VENTURE\Desktop\options-web\1\site\site\about-us.php', encoding='utf-8').read()

# Let's find the breadcrumb section. Usually it's in a nav, ul, or div class containing 'breadcrumb' or just text "Home" and "About Us"
# We know the page has an <h1> with "About Options Psychiatry"
matches = re.finditer(r'<([^>]+)>([^<]*?About Options Psychiatry[^<]*?)</\1>', html, re.IGNORECASE)
out = []
for m in matches:
    start = max(0, m.start() - 1000)
    end = min(len(html), m.end() + 200)
    out.append(html[start:end])

if not out:
    # Try finding the breadcrumb link directly
    matches = re.finditer(r'<a[^>]*>.*?Home.*?</a>.*?About Us', html, re.IGNORECASE | re.DOTALL)
    for m in matches:
        out.append(m.group(0))

with open(r'c:\Users\GC VENTURE\Desktop\options-web\1\site\site\breadcrumb.txt', 'w', encoding='utf-8') as f:
    f.write('\n---\n'.join(out))
print("Extraction complete.")
