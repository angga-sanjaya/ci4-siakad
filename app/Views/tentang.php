<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .about-wrap {
        display: grid;
        grid-template-columns: minmax(0, 1.4fr) minmax(280px, 0.9fr);
        gap: 22px;
        align-items: start;
    }

    .about-card {
        background: #fff;
        border: 1px solid #dce5ef;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(23, 59, 101, .08);
    }

    .about-card-head {
        background: #173b65;
        color: #fff;
        padding: 12px 18px;
        font-weight: 600;
    }

    .about-card-body {
        padding: 18px;
    }

    .about-lead {
        margin: 0 0 12px;
        color: #34495e;
        line-height: 1.7;
    }

    .about-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 18px;
    }

    .about-tag {
        background: #e9eff6;
        color: #173b65;
        border: 1px solid #d3dfec;
        border-radius: 999px;
        padding: 4px 12px;
        font-size: 13px;
        font-weight: 600;
    }

    .about-profile {
        display: flex;
        gap: 18px;
        align-items: center;
    }

    .about-photo {
        width: 150px;
        height: 200px;
        object-fit: cover;
        object-position: center 20%;
        border-radius: 10px;
        border: 3px solid #e9eff6;
        box-shadow: 0 2px 8px rgba(23, 59, 101, .15);
        flex-shrink: 0;
    }

    .about-detail {
        flex: 1;
        min-width: 0;
    }

    .about-name {
        margin: 0 0 4px;
        color: #173b65;
        font-size: 1.25rem;
    }

    .about-role {
        margin: 0 0 14px;
        color: #24588b;
        font-size: .9rem;
        font-weight: 600;
    }

    .about-info {
        width: 100%;
        border-collapse: collapse;
    }

    .about-info th,
    .about-info td {
        border: 1px solid #dce5ef;
        padding: 8px 10px;
        text-align: left;
        font-size: 14px;
    }

    .about-info th {
        width: 84px;
        background: #f4f6f9;
        color: #173b65;
    }

    .about-note {
        margin: 18px 0 0;
        padding: 10px 14px;
        border-left: 4px solid #24588b;
        background: #e9eff6;
        color: #34495e;
        font-size: 13px;
        line-height: 1.6;
    }

    @media (max-width: 720px) {
        .about-wrap {
            grid-template-columns: 1fr;
        }

        .about-profile {
            flex-direction: column;
            align-items: flex-start;
        }

        .about-photo {
            width: 100%;
            height: 260px;
        }
    }
</style>

<div class="about-wrap">

    <section class="about-card">
        <div class="about-card-head">Tentang Aplikasi</div>
        <div class="about-card-body">
            <p class="about-lead">
                Sistem Informasi Akademik (SIAKAD) merupakan aplikasi sederhana
                untuk menampilkan dan mengelola informasi akademik Program Studi
                Sistem Informasi.
            </p>
            <p class="about-lead">
                Aplikasi ini dikembangkan menggunakan framework CodeIgniter 4
                dengan database MySQL dan menerapkan pola MVC
                (Model–View–Controller) untuk memisahkan logika data, tampilan,
                serta alur proses aplikasi.
            </p>
            <p class="about-lead">
                Fitur yang tersedia meliputi pengelolaan data mahasiswa
                (Create, Read, Update, Delete), data dosen dan mata kuliah,
                serta navigasi yang mudah digunakan.
            </p>
            <div class="about-tags">
                <span class="about-tag">CodeIgniter 4</span>
                <span class="about-tag">MySQL</span>
                <span class="about-tag">PHP</span>
                <span class="about-tag">MVC</span>
                <span class="about-tag">CRUD</span>
            </div>
        </div>
    </section>

    <section class="about-card">
        <div class="about-card-head">Dibuat Oleh</div>
        <div class="about-card-body">
            <div class="about-profile">
                <img src="<?= base_url('images/fotoku.jpg') ?>"
                     alt="Foto Angga Sanjaya"
                     class="about-photo">

                <div class="about-detail">
                    <h3 class="about-name">Angga Sanjaya</h3>
                    <p class="about-role">Mahasiswa</p>

                    <table class="about-info">
                        <tr>
                            <th>NIM</th>
                            <td>2024 57201 012</td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td>Sistem Informasi</td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <td>5</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>
