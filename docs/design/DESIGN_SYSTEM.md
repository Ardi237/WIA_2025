# SinyalKota Design System

Dokumen ini menjadi pedoman visual dan implementasi antarmuka SinyalKota. Tujuannya adalah menghasilkan UI orisinal bergaya modern enterprise SaaS yang terinspirasi prinsip desain Atlassian: hierarki informasi kuat, warna fungsional, ruang yang terukur, komponen reusable, dan alur kerja yang mudah dipindai. Pedoman ini bukan instruksi untuk menyalin halaman, aset, logo, ilustrasi, copywriting, font proprietary, atau source code Atlassian.

Pedoman ini berlaku untuk seluruh pekerjaan UI berikutnya. Implementasi dilakukan bertahap melalui audit, fondasi bersama, satu halaman pilot, validasi, lalu perluasan ke halaman lain. Perubahan visual tidak boleh merusak route, validasi, otorisasi, state, data flow, atau business logic.

## Prinsip desain

- **Modern dan tegas.** Judul, tindakan utama, dan status harus segera terlihat.
- **Bersih tetapi tidak kosong.** Whitespace membantu pembacaan dan pengelompokan, bukan sekadar dekorasi.
- **Warna bersifat fungsional.** Biru digunakan untuk aksi dan selection; warna status hanya digunakan untuk makna status.
- **Modular dan konsisten.** Komponen, border, padding, radius, dan interaction state digunakan ulang.
- **Minim distraksi.** Hindari shadow besar, gradient berlebihan, animasi panjang, kartu dekoratif tanpa fungsi, dan ornamen generik.
- **Konteks menentukan kepadatan.** Landing page boleh ekspresif, sedangkan halaman kasus, laporan, aktivitas, dan admin harus data-first dan efisien.

## Dua mode halaman

Satu identitas visual tidak berarti semua halaman memiliki struktur yang sama. Pilih mode berdasarkan pekerjaan pengguna.

| Aspek | Marketing | Product application |
| --- | --- | --- |
| Tujuan | Menjelaskan masalah, solusi, dan membangun kepercayaan | Membantu pengguna menyelesaikan pekerjaan |
| Halaman SinyalKota | Landing page dan section edukasi publik | Daftar kasus, detail kasus, laporan, aktivitas, profil, admin |
| Layout | Navigation, hero, proof, manfaat, cara kerja, CTA, footer | Topbar atau sidebar, breadcrumb, toolbar, filter, form, tabel, status |
| Tipografi | Headline besar dan editorial | Ringkas, mudah dipindai, data-first |
| Spacing | Section vertikal sekitar 80-112px pada desktop | Page padding sekitar 24-32px pada desktop |
| Prioritas | Pemahaman dan kepercayaan | Kecepatan kerja, validasi, dan kejelasan status |

Jangan membawa hero besar dan whitespace marketing ke halaman operasional. Sebaliknya, jangan membuat landing page terasa seperti tabel administrasi.

## Design tokens

Seluruh warna, spacing, radius, dan ukuran tipografi harus berasal dari token terpusat. Nilai berikut adalah baseline awal dan boleh disesuaikan secara terkontrol apabila kebutuhan brand atau aksesibilitas mengharuskannya.

### Warna

| Token | Nilai awal | Penggunaan |
| --- | --- | --- |
| `brand` | `#0C66E4` | Primary CTA, link, focus, dan selection |
| `brand-hover` | `#0052CC` | Hover tombol dan link utama |
| `brand-soft` | `#EAF2FF` | Navigation terpilih dan panel aksen ringan |
| `ink` | `#172B4D` | Heading dan teks utama |
| `muted` | `#44546F` | Teks sekunder dan metadata |
| `surface` | `#FFFFFF` | Card, menu, dialog, dan area konten |
| `canvas` | `#F7F8FA` | Background area kerja |
| `canvas-alt` | `#EEF4FF` | Section highlight ringan |
| `border` | `#DFE1E6` | Divider, outline, dan batas komponen |
| `success` | `#216E4E` | Status positif atau selesai |
| `warning` | `#974F0C` | Status perlu perhatian atau menunggu |
| `danger` | `#AE2E24` | Error, penolakan, atau aksi berbahaya |

Gunakan teks atau ikon bersama warna status. Informasi tidak boleh bergantung pada warna saja.

### Tipografi

- Font utama: `Inter`, `system-ui`, atau font proyek berlisensi dengan fallback yang aman.
- Marketing H1: responsif sekitar `2.8rem` sampai `4.6rem`.
- Marketing H2: sekitar `2rem` sampai `3rem`.
- Marketing body: `16px`; introductory text: `18px` sampai `20px`.
- Product page title: `26px` sampai `32px`.
- Product section heading: `20px` sampai `24px`.
- Card title: `16px` sampai `18px`.
- Product body: `14px` sampai `16px`, tanpa mengecilkan teks untuk memaksa layout.

### Spacing dan ukuran

- Spacing scale: `4`, `8`, `12`, `16`, `24`, `32`, `48`, `64`, `80`px.
- Basis utama adalah kelipatan `8px`; `4px` dan `12px` dapat digunakan untuk detail rapat.
- Control radius: `6px` sampai `8px`.
- Card radius: `8px` sampai `12px`.
- Panel besar: maksimal sekitar `16px`.
- Marketing container: maksimum sekitar `1200px`.
- Product application dapat fluid sesuai kepadatan data dan kebutuhan halaman.

## Pola halaman SinyalKota

### Landing page

Urutan baseline:

1. Navigation.
2. Hero yang menjelaskan masalah dan nilai SinyalKota.
3. Ringkasan atau trust proof.
4. Kasus terbaru dan kasus yang membutuhkan verifikasi.
5. Cara kerja dan manfaat.
6. CTA utama.
7. Footer.

### Daftar kasus

Urutan baseline:

1. Judul halaman dan penjelasan ringkas.
2. Search serta filter kategori, wilayah, dan status.
3. Hasil dalam list atau card yang mudah dipindai.
4. Status chip yang konsisten.
5. Pagination atau mekanisme pemuatan yang jelas.
6. Empty state dengan satu tindakan relevan.

### Detail kasus

Urutan baseline:

1. Identitas kasus, lokasi, kategori, dan status.
2. Ringkasan utama.
3. Evidence dan sumber.
4. Sinyal terkait serta statistik kontribusi.
5. Tindakan pengguna seperti verifikasi, follow, komentar, atau laporan.
6. Hasil dan riwayat verifikasi jika tersedia.

### Laporan dan form

Urutan baseline:

1. Judul dan konteks kasus bila laporan berasal dari kasus.
2. Progress atau status yang terlihat.
3. Form dengan label eksplisit dan validasi dekat field.
4. Aksi draft dan submit yang tidak membingungkan.
5. Feedback sukses atau error yang jelas.

### Dashboard dan admin

Urutan baseline:

1. Judul halaman dan tindakan utama.
2. Ringkasan penting atau KPI yang benar-benar relevan.
3. Daftar, tabel, atau pekerjaan prioritas.
4. Status dan next action yang mudah dipindai.

Admin adalah area internal. Tampilannya boleh lebih padat daripada halaman publik tetapi tetap memakai token dan kontrak komponen yang sama.

## Kontrak komponen

### Button

- Primary menggunakan `brand`; secondary menggunakan outline atau quiet treatment.
- Radius `6px` sampai `8px`.
- Sediakan state hover, active, disabled, loading, dan focus-visible.
- Satu area tidak boleh memiliki banyak primary action yang saling bersaing.

### Card

- Gunakan `surface`, border tipis, dan radius `8px` sampai `12px`.
- Shadow hanya jika membantu layering; hindari shadow besar.
- Card yang tidak dapat diklik tidak boleh terlihat seperti tombol.

### Input

- Label harus eksplisit dan tetap terlihat.
- Gunakan border netral, focus ring jelas, dan error message yang dekat dengan field.
- Sediakan state focus, disabled, error, dan success bila relevan.
- Gunakan `aria-invalid` dan atribut aksesibilitas yang sesuai.

### Navigation

- Kelompok menu harus ringkas dan terstruktur.
- Sediakan active state yang jelas.
- Navigation mobile harus memiliki toggle yang dapat digunakan dengan keyboard dan `aria-expanded`.

### Tabs

- Selected state harus jelas melalui teks dan indikator visual.
- Dukung keyboard navigation dan `aria-selected`.
- Panel yang tampil harus berhubungan dengan tab aktif.

### Badge dan status chip

- Gunakan warna semantik, teks singkat, dan kontras yang cukup.
- Status harus tetap dapat dipahami tanpa warna.
- Nama status yang sama harus menggunakan style yang sama di seluruh aplikasi.

### Data table

- Header kuat, divider tipis, alignment sesuai tipe data, dan kepadatan terkontrol.
- Sort dan filter hanya ditampilkan ketika benar-benar berfungsi.
- Pada mobile, gunakan horizontal scrolling terarah atau card view; jangan mengecilkan teks secara ekstrem.

### Empty state

- Jelaskan keadaan secara ringkas.
- Gunakan ilustrasi kecil hanya jika membantu.
- Berikan satu next action yang paling relevan.

### Modal

- Gunakan surface fokus dengan primary action yang jelas.
- Dukung Escape, focus trap, label dialog, dan scrolling yang aman.
- Jangan menggunakan modal untuk workflow panjang yang lebih tepat menjadi halaman.

## Interaksi dan motion

- Hover dan press: sekitar `100-150ms`.
- Modal dan panel: sekitar `180-280ms`.
- Animasi harus menjelaskan perubahan state, bukan memperlambat tugas.
- Hormati `prefers-reduced-motion`.
- Loading state harus menjaga layout stabil dan mencegah submit ganda.

## Responsivitas

Setiap halaman yang berubah harus diperiksa minimal pada lebar berikut:

- `360px`
- `390px`
- `768px`
- `1024px`
- `1440px`

Hindari overflow horizontal pada halaman. Tabel atau data lebar dapat memakai container scroll yang jelas. Action penting tidak boleh hilang pada mobile.

## Aksesibilitas

- Semua form memiliki label yang terhubung dengan field.
- Semua fungsi inti dapat digunakan dengan keyboard.
- Focus-visible harus terlihat jelas.
- Kontras teks, kontrol, dan status harus memadai.
- Target sentuh harus cukup besar.
- Gunakan struktur heading yang logis.
- Ikon yang berdiri sendiri membutuhkan accessible name.
- Hormati reduced motion dan jangan menyampaikan informasi melalui warna saja.

## Aturan implementasi

1. Baca dokumen ini sebelum memodifikasi UI.
2. Audit framework, layout, route, state, styling, dan komponen yang sudah ada.
3. Pilih mode halaman: marketing atau product application.
4. Pusatkan semantic tokens; hindari hex, spacing, dan radius ad hoc di banyak file.
5. Perbaiki shared component sebelum membuat variasi halaman.
6. Pertahankan route, API, validasi, permission, state, data flow, dan domain logic.
7. Kerjakan tepat satu halaman pilot sebelum rollout besar.
8. Uji build, test, responsivitas, keyboard, focus, kontras, dan screenshot bila tersedia.
9. Jangan mengklaim pixel-perfect tanpa pembandingan screenshot aktual.
10. Laporkan file yang berubah, keputusan desain, pengujian, keterbatasan, dan saran batch berikutnya.

Untuk proyek ini, Tailwind CSS tetap menjadi sistem styling. Token nantinya dipetakan ke `resources/css/app.css` atau layer tema bersama tanpa mengganti framework atau backend.

## Alur implementasi

1. **Audit repositori.** Petakan halaman, layout, komponen, styling, dependensi, dan inkonsistensi.
2. **Mapping tema.** Tentukan token yang digunakan dan komponen bersama yang perlu distandarkan.
3. **Fondasi shared UI.** Terapkan token serta primitive reusable tanpa mengubah business logic.
4. **Pilot satu halaman.** Pilih halaman representatif dan implementasikan secara penuh.
5. **Validasi.** Uji responsive, interaction state, keyboard, build, test, dan screenshot.
6. **Rollout bertahap.** Migrasikan halaman lain dalam batch kecil setelah pilot disetujui.

## Definition of done

Sebuah halaman belum selesai hanya karena warna dan card terlihat menarik. Semua kondisi berikut harus terpenuhi:

- Warna, font, radius, spacing, dan komponen berasal dari token bersama.
- Layout sesuai dengan konteks marketing atau product application.
- Button, card, input, badge, dan table tidak memiliki duplikasi tanpa alasan.
- Hover, focus, disabled, loading, empty, error, dan success tersedia jika relevan.
- Tampilan telah diperiksa pada `360`, `390`, `768`, `1024`, dan `1440px`.
- Tidak ada overflow halaman, clipping, tabel tidak terbaca, atau action yang hilang.
- Keyboard navigation, label, kontras, focus-visible, dan reduced motion aman.
- Route, permission, validasi, state, serta flow bisnis tetap bekerja.
- Tidak menggunakan logo, ilustrasi, font, atau aset proprietary tanpa hak.
- Build, lint atau formatter, dan test relevan berhasil.

## Hal yang harus dihindari

- Memberi arahan abstrak seperti “buat seperti Atlassian” tanpa token dan batasan.
- Menyalin komposisi, aset, atau identitas Atlassian secara identik.
- Menggunakan layout landing page untuk dashboard, tabel, atau form operasional.
- Mendefinisikan warna, radius, dan spacing berbeda pada setiap komponen.
- Mengubah banyak halaman sebelum halaman pilot divalidasi.
- Menambahkan data palsu ke lingkungan produksi demi tampilan demo.
- Mengklaim desain sudah diuji secara visual tanpa browser atau screenshot.

## Referensi prinsip

- Atlassian homepage teamwork: <https://www.atlassian.com/#teamwork>
- Atlassian Design System spacing: <https://atlassian.design/foundations/spacing>
- Atlassian Design System grid: <https://atlassian.design/foundations/grid>
- Atlassian Design System radius: <https://atlassian.design/foundations/radius>
- Atlassian Design System typography: <https://atlassian.design/foundations/typography>
- Atlassian Design System motion: <https://atlassian.design/foundations/motion>
- Atlassian Design System tokens: <https://atlassian.design/foundations/design-tokens>
