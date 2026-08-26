import os
import glob
import re

directory = r"c:\Users\GC VENTURE\Desktop\options-web\1\site\site"
files = glob.glob(os.path.join(directory, "*.php"))

# Regex to find: src="_external/play.gumlet.io/embed/[ID]/index.html"
# and replace with: src="https://play.gumlet.io/embed/[ID]"

pattern = re.compile(r'src="_external/play\.gumlet\.io/embed/([a-zA-Z0-9]+)/index\.html"')
repl = r'src="https://play.gumlet.io/embed/\1"'

for file_path in files:
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    original = content
    content = pattern.sub(repl, content)
    
    if original != content:
        with open(file_path, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated {os.path.basename(file_path)}")
