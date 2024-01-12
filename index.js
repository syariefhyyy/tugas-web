function getCurrentTime() {
  const now = new Date();
  const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];

  const day = days[now.getDay()];
  const date = now.getDate();
  const month = months[now.getMonth()];
  const year = now.getFullYear();
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");

  return `${hours}:${minutes} - ${day}, ${date} ${month} ${year}`;
}

// Fungsi untuk memperbarui waktu secara terus-menerus setiap detik
function updateTime() {
  const currentTimeElement = document.getElementById("current-time");
  if (currentTimeElement) {
    currentTimeElement.textContent = getCurrentTime();
  }
}

// Memanggil fungsi updateTime untuk memperbarui waktu setiap detik
setInterval(updateTime, 1000);

// Menjalankan fungsi updateTime untuk pertama kalinya saat halaman dimuat
updateTime();
