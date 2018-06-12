find . -name ".gitignore" | while read fname; do
  echo "" > $fname
done