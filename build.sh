BASE='http://127.0.0.1:8000'

php artisan serve --port 8000&
sleep 2

rm -rf build
mkdir build

pages=(consultations contact equipe hospitalisation juridique liens-utiles pathologies sites-operatoires
)
for page in "${pages[@]}"
do
  wget "$BASE/$page" -O "build/$page.html"
  echo "/$page $page.html" >> build/_redirects
done

wget $BASE/robots.txt -O build/robots.txt
wget $BASE/ -O build/index.html

echo "/ index.html" >> build/_redirects

mkdir -p build/build/assets
cp -R public/build/assets build/build/

killall php
