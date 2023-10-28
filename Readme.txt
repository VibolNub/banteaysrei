Get-ChildItem -Recurse -Filter *.html | Rename-Item -NewName { $_.Name -replace '\.html$', '.php' }
