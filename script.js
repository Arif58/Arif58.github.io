function proses() {

    //dapatkan hari ini
    const hari = new Date();
    //dapatkan hari dengan format senin, selasa, rabu, dst
    const hariIni = hari.toLocaleDateString("id-ID", { weekday: "long" });
    //hari ini dengan format 2 digit
    const tanggal = hari.getDate() < 10 ? `0${hari.getDate()}` : hari.getDate();
    const bulan = hari.getMonth() + 1 < 10 ? `0${hari.getMonth() + 1}` : hari.getMonth() + 1;
    const tahun = hari.getFullYear();

    const teks = document.getElementById("link").value;

    //pisahkan teks berdasarkan enter
    let kata = teks.split("\n");
    //hapus baris kosong
    kata = kata.filter((item) => item !== "");
    //buat teks baru
    let teksBaru = "";
    //tambahkan teks baru
    kata.forEach((item, index) => {
        //hapus character sebelum https
        item = item.replace(/.*https/, "https");
        teksBaru += `${index + 1}. ${item}\n`;
    });
    let countLink = kata.length;

    let intro = 
`Yth   
    1. Kapolres Cilegon
    2. Wakapolres Cilegon
     
Dari : Kasat Samapta Polres Cilegon.
    
Assalamualaikum wr. wb Mohon ijin komandan melaporkan Link IMM di Website Polres Cilegon Pada hari ${hariIni} (${tanggal}/${bulan}/${tahun}) Sebanyak ${countLink} link Sebagai Berikut:
    `;
    


    //tampilkan hasil
    document.getElementById("result").value = `${intro}\n${teksBaru}`;

    
}

//copy to clipboard
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('copyToClipboard-a').addEventListener('click', function() {
        // Dapatkan elemen textarea
        var text = document.getElementById('result');

        // Pilih teks di dalam textarea
        text.select();
        text.setSelectionRange(0, 99999); // Untuk memastikan semua teks terpilih di perangkat mobile

        // Salin teks yang dipilih ke clipboard
        document.execCommand('copy');

        // Opsional: Beri feedback ke pengguna
        alert("Teks berhasil disalin ke clipboard!");
    });
});