<body>
    <div class="views">
        <div class="view view-main">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="#" class="link icon-only open-panel">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="center">
                        <h2 class="title">KONTAK KAMI</h2>
                    </div>
                    <div class="right">
                        <a href="index.html" class="link icon-only">
                            <i class="fa fa-home"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pages navbar-through">
                <div data-page="contact" class="page">
                    <div class="page-content">
                        
                        <div id="map-canvas-contact"></div>
                        <form action="process.php" id="contact-form" class="form-horizontal" role="form" method="post">
                            <div class="list-block">
                                <ul>
                                    <li class="contact">
                                        <div class="form-group" id="name-field">
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Nama</div>
                                                <div class="item-input">
                                                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nama" required>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="list-block">
                                <ul>
                                    <li class="contact">
                                        <div class="form-group" id="email-field">
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Email</div>
                                                <div class="item-input">
                                                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="list-block">
                                <ul>
                                    <li class="contact">
                                        <div class="form-group" id="subject-field">
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Judul</div>
                                                <div class="item-input">
                                                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Judul" required>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="list-block">
                                <ul>
                                    <li class="align-top contact">
                                        <div class="form-group" id="message-field">
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">Pesan</div>
                                                <div class="item-input">
                                                    <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Isi pesan" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-block">
                            <div class="send_button">
                            <a href="#" class="item-link button button-round">Kirim</a>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>