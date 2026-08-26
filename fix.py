import os
import glob
import re

directory = r"c:\Users\GC VENTURE\Desktop\options-web\1\site\site"
files = glob.glob(os.path.join(directory, "*.php"))

grid_pattern = r"grid-template-columns:repeat\(3,1fr\);"
grid_repl = r"grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));"

# The buttons might have varying spacing, we use regex to match them
btn_pattern = re.compile(
    r'<a class="opt-btn-hero-dark" href="contact" style="margin-right:15px;">Schedule Your Free Consultation</a>\s*'
    r'<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;margin-right:15px;">Call \(610\) 741-6567 Now</a>\s*'
    r'<a class="opt-btn opt-btn-contact-orange" href="tms-therapy-reading" style="text-decoration:none;">Explore TMS Therapy</a>'
)

btn_repl = (
    r'<div style="display:flex; flex-wrap:wrap; justify-content:center; gap:15px;">\n'
    r'<a class="opt-btn-hero-dark" href="contact" style="text-decoration:none;">Schedule Your Free Consultation</a>\n'
    r'<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;">Call (610) 741-6567 Now</a>\n'
    r'<a class="opt-btn opt-btn-contact-orange" href="tms-therapy-reading" style="text-decoration:none;">Explore TMS Therapy</a>\n'
    r'</div>'
)

for file_path in files:
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    original = content
    content = re.sub(grid_pattern, grid_repl, content)
    content = btn_pattern.sub(btn_repl, content)
    
    if original != content:
        with open(file_path, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated {os.path.basename(file_path)}")
