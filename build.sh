BASE='http://127.0.0.1:8000'

php artisan serve --port 8000&> /dev/null &
pid=$!
sleep 2

rm -rf build
mkdir build

pages=(consultations contact equipe hospitalisation juridique liens-utiles pathologies sites-operatoires
)
for page in "${pages[@]}"
do
  wget "$BASE/$page" -O - -q | sed 's|http://127.0.0.1:8000|https://www.uro-augusti.fr|g' > "build/$page.html"
  echo "/$page /$page.html 200" >> build/_redirects
done

wget $BASE/robots.txt -q -O build/robots.txt
wget $BASE/ -O - -q | sed 's|http://127.0.0.1:8000|https://www.uro-augusti.fr|g' > build/index.html

echo "/ /index.html 200" >> build/_redirects

mkdir -p build/build/assets
cp -R public/build/assets build/build/
cp -R public/assets/ build/assets/

kill "${pid}"
