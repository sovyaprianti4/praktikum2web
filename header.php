<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Web'; ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>
<body>

<div id="container">
    <header>
        <h1>Layout Sederhana</h1>
    </header>

    <nav>
        <a href="<?= base_url('/'); ?>">Home</a>
        <a href="<?= base_url('/artikel'); ?>">Artikel</a>
        <a href="<?= base_url('/about'); ?>">About</a>
        <a href="<?= base_url('/contact'); ?>">Kontak</a>
    </nav>

    <section id="main">
        <section id="content">

<style>
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: white;
    border-radius: 8px;
    overflow: hidden;
}

.table th {
    background: linear-gradient(to right, #ff7e5f, #feb47b);
    color: white;
    padding: 10px;
}

.table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.table tr:hover {
    background: #f5f5f5;
}

.btn {
    display: inline-block;
    padding: 8px 12px;
    background: #6c5ce7;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}
</style>