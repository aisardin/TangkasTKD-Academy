<?php
include 'configs/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TangkasTkdClub</title>

<style>
    /* Contoh menyembunyikan scrollbar pada semua elemen yang ada */
* {
  scrollbar-width: none;
  -ms-overflow-style: none;
}

*::-webkit-scrollbar {
  display: none;
}
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f0f0f0;
  }

  /* Navbar Styles */
  nav{
    position:fixed;
    top: 0;          /* Di bahagian atas halaman */
    width: 100%;     /* Lebar penuh */
    z-index: 999; 
  }
  .navbar {
    position:sticky;
    top: 0; 
    z-index: 999;
    background-color: #222;
    display: flex;
    align-items: center;
    padding: 10px 20px; 
  }
  .navbar-logo {
    display: flex;
    align-items: center;
  }
  .navbar-logo img {
    height: 40px;
    margin-right: 10px;
  }
  .navbar-brand {
    color: #fff;
    font-size: 20px;
    font-weight: bold;
  }
  .navbar-menu {
    margin-left: auto;
    display: flex;
    align-items: center;
  }
  .navbar-menu a {
    color: #fff;
    margin: 0 10px;
    text-decoration: none;
    font-weight: 600;
  }
  .btn-daftar {
    background-color: #4CAF50;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    margin-left: 15px;
    font-weight: bold;
  }

  /* Header Section */
  .header {
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2)), url('src/alam.png') no-repeat center center;
    background-size: cover;
    color: #fff;
    padding: 100px 20px;
  }
  .header h1 {
    font-size: 36px;
    margin-bottom: 25px;
    color:yellow;
  }
  .header h2 {
    font-size: 24px;
    margin-bottom: 30px;
  }
  .btn-daftar-header {
    background-color: #4CAF50;
    padding: 12px 24px;
    border-radius: 5px;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
  }

  /* Content Section */
  .content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 40px 20px;
    background-color: #fff;
  }
  .card {
    background: #f9f9f9;
    width: 300px;
    margin: 10px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .card img {
    width: 100%;
    border-radius: 5px;
  }
  .card h3 {
    margin-top: 15px;
    font-size: 20px;
  }
  .card p {
    margin-top: 10px;
    font-size: 14px;
  }
  .btn {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
  }

  /* Footer */
  .footer {
    display: flex;
    justify-content: center;
    gap: 15px;
    padding: 20px;
  }
  .footer a {
    color: #222;
    font-size: 24px;
    text-decoration: none;
  }

  @media(max-width: 1000px){
    .content {
      flex-direction: column;
      align-items: center;
    }
    .navbar {
      flex-direction: column;
    }
    .navbar-menu {
      margin-left: 0;
      margin-top: 10px;
    }
  }
</style>
</head>
<body>

<!-- Navbar -->
<nav>
<div class="navbar">
  <div class="navbar-logo">
    <img src="https://via.placeholder.com/40" alt="Logo" />
    <div class="navbar-brand">Tangkas Academy</div>
  </div>
  <div class="navbar-menu">
    <a href="#">Beranda</a>
    <a href="#">Perkembangan</a>
    <a href="#">Info</a>
    <a href="#">Galeri Gambar</a>
    <a href="#">Hubungi Kami</a>
    <a href="#" class="btn-daftar">DAFTAR</a>
  </div>
</div>
</nav>
</body>
