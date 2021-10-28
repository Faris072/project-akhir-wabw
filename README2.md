#Cara menggunakan github
- pastikan anda sudah menjadi colaborate dengan klik link yang sudah di bagikan di grub whatsapp atau anda bisa fork ke akun anda (lebih disarankan menjadi colaborate)
- di git bash anda initials dulu git bash anda dengan perintah "git init"
- jika sudah melakukan cara di atas maka selanjutnya anda cloning project di github ke komputer anda dengan mengetikkan perintah "git clone `url github`"
- untuk push, nama branch lokal anda harus sama dengan branch yang akan anda push dengan mengetikkan "git push -u `nama remote anda` `nama branch yang akan anda push`".
- untuk pull pastikan branch lokal anda sama dengan branch yang akan anda pull. pull menggunakan perinatah "git pull `nama remote` `nama branch`".
- jangan lupa setelah cloning, sebelum push, dan sesudah pull di commit di branch lokal anda.
- langkah untuk commit saat setelah cloning adalah dengan menambahkan dulu semua yang ada di project anda ke repo lokal anda dengan perintah "git add ." lalu setelah itu di commit dengan perintah "git commit -m "`pesan commit anda`" " 
- langkah untuk commit selain setelah clonning (dengan kata lain memperbarui repo lokal anda) adalah dengan mengetikan perintah "git commit -am "`pesan commit anda`" "
- jangan lupa berdoa sebelum bekerja


#error di git
- `fatal: refusing to merge unrelated histories` saat pull. cara mengatasi: `git pull {nama remote} {nama branch} --allow-unrelated-histories`
- `error: src refspec faris does not match any` saat push. cara mengatasi: nama branch lokal anda harus sama dengan branch yang akan anda push
- saat pull terdapat `Already up to date.` tapi di lokal anda tidak ada yang berubah. itu berarti di lokal anda lebih update daripada di github dan di github tidak ada perubahan apapun. jika anda tetap ingin pull ke github anda harus ada perubahan dan di commit dulu di githubnya setelah itu anda bisa pull lagi.