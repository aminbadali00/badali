<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Profil Saya</title>
    <style>
        /* Reset margin, padding dan set height & background */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: linear-gradient(rgb(97, 197, 255), rgb(141, 238, 255));
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        /* Container dengan ukuran fixed seperti HP */
        #container {
            width: 350px;
            max-height: 600px;
            background: rgba(255 255 255 / 0.95);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            overflow-y: auto;
            text-align: center;
            padding: 15px 20px 30px 20px;
            box-sizing: border-box;
        }
        h1 {
            background-color: rgba(131, 241, 35, 0.75);
            color: white;
            padding: 10px;
            border-radius: 8px;
            margin-top: 0;
            font-size: 1.4rem;
        }
        p.subtitle {
            color: gray;
            margin: 10px 0 15px 0;
            font-weight: 500;
            font-style: italic;
        }
        #foto-profil {
            display: block;
            margin: 0 auto 15px auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            border: 2px solid #4f32f2;
        }
        input[type="file"] {
            display: block;
            margin: 0 auto 20px auto;
            cursor: pointer;
            font-size: 1rem;
        }
        #konten h2 {
            margin-bottom: 8px;
            font-size: 1.2rem;
            color: #4f32f2;
            border-bottom: 2px solid #4f32f2;
            padding-bottom: 4px;
            margin-top: 20px;
        }
        #konten p, #konten ul {
            margin-top: 0;
            margin-bottom: 12px;
            color: #333;
            font-size: 0.95rem;
            line-height: 1.4;
        }
        #konten ul {
            list-style-type: none;
            padding-left: 0;
        }
        #konten ul li {
            background: #e3e0ff;
            margin: 5px auto;
            padding: 6px 10px;
            border-radius: 6px;
            width: fit-content;
        }
        button {
            background-color: rgb(79, 50, 242);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            width: 100%;
            max-width: 320px;
            user-select: none;
        }
        button:hover {
            background-color: rgb(195, 71, 203);
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Halo, Saya [Muhammad Amin Badali]</h1>
        <p class="subtitle">- Foto Profil -</p>

        <input type="file" id="upload" accept="image/*" onchange="previewImage(event)" />

        <img id="foto-profil" src="" alt="Foto Profil" style="display: none;" />

        <div id="konten">
            <h2>Tentang Saya</h2>
            <p>Saya adalah mahasiswa yang sedang belajar pengembangan web di Politeknik Hasnur</p>

            <h2>Keahlian</h2>
            <ul>
                <li>Editing</li>
                <li>Main Game</li>
                <li>Mancing</li>
            </ul>

            <h2>Kontak</h2>
            <p>Email: badaliaminn05</p>
            <p>Instagram: @badal1.aminn</p>
        </div>

        <button onclick="toggleKonten()">Sembunyikan Biodata</button>
    </div>

    <script>
        const konten = document.getElementById("konten");
        const tombol = document.querySelector("button");

        function toggleKonten() {
            if (konten.style.display === "none") {
                konten.style.display = "block";
                tombol.textContent = "Sembunyikan Biodata";
            } else {
                konten.style.display = "none";
                tombol.textContent = "Tampilkan Biodata";
            }
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const fotoProfil = document.getElementById("foto-profil");
                fotoProfil.src = reader.result;
                fotoProfil.style.display = "block";
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>