import os
import glob
import re

directory = r"c:\Users\GC VENTURE\Desktop\options-web\1\site\site"
files = glob.glob(os.path.join(directory, "*.php"))

# We want to match the three buttons. 
# The first two are identical. The third varies.
btn_pattern = re.compile(
    r'<a class="opt-btn-hero-dark" href="contact" style="margin-right:15px;">Schedule Your Free Consultation</a>\s*'
    r'<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;margin-right:15px;">Call \(610\) 741-6567 Now</a>\s*'
    r'<a class="opt-btn opt-btn-contact-orange" href="([^"]+)" style="text-decoration:none;">([^<]+)</a>'
)

def replacer(match):
    href3 = match.group(1)
    text3 = match.group(2)
    return (
        f'<div style="display:flex; flex-wrap:wrap; justify-content:center; gap:15px;">\n'
        f'<a class="opt-btn-hero-dark" href="contact" style="text-decoration:none;">Schedule Your Free Consultation</a>\n'
        f'<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;">Call (610) 741-6567 Now</a>\n'
        f'<a class="opt-btn opt-btn-contact-orange" href="{href3}" style="text-decoration:none;">{text3}</a>\n'
        f'</div>'
    )

for file_path in files:
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    original = content
    content = btn_pattern.sub(replacer, content)
    
    if original != content:
        with open(file_path, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated {os.path.basename(file_path)}")
