<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>
        <link rel="stylesheet" href="bookshelf.css">
    </head>
    <body>
        <header>
            <div id="header">
                <div id="logo">
                    <a href="./bookshelf_index.php"><img src="./images/logo.png" alt="Bookshelf"></a>
                </div>
                <nav>
                    <a href="./bookshelf_form.php"><img src="./images/icon_plus.png" alt=""> 書籍登録</a>
                </nav>
            </div>
        </header>
        <div id="cover">
            <h1 id="cover_title">カンタン！あなたのオンライン本棚</h1>
            <form action="bookshelf_index.php" method="post">
                <div class="book_status unread active">
                    <input type="submit" name="submit_only_unread" value="未読"><br>
                    <div class="book_count"><?php //未読ステータス書籍数のカウント ?></div>
                </div>
                <div class="book_status reading active">
                    <input type="submit" name="submit_only_reading" value="読中"><br>
                    <div class="book_count"><?php //読中ステータス書籍数のカウント ?></div>
                </div>
                <div class="book_status finished active">
                    <input type="submit" name="submit_only_finished" value="読了"><br>
                    <div class="book_count"><?php //読了ステータス書籍数のカウント ?></div>
                </div>
            </form>
        </div>
        <div class="wrapper">
            <div id="main">
                <div id="book_list" class="clearfix">
                    <?php //登録書籍の数だけ.book_itemを繰り返し ?>
                    <div class="book_item">
                        <div class="book_image">
                            <img src="<?php //登録画像のURL ?>" alt="">
                        </div>
                        <div class="book_detail">
                            <div class="book_title">
                                <?php //書籍タイトル ?>
                            </div>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_status unread active">
                                    <input type="submit" name="submit_book_unread" value="未読">
                                </div>
                                <div class="book_status reading">
                                    <input type="submit" name="submit_book_reading" value="読中">
                                </div>
                                <div class="book_status finished">
                                    <input type="submit" name="submit_book_finished" value="読了">
                                </div>
                            </form>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_delete">
                                  <input type="submit" name="submit_book_delete" value="削除する"><img src="images/icon_trash.png" alt="icon trash">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="book_item">
                        <div class="book_image">
                            <img src="./images/item_book_2.jpg" alt="">
                        </div>
                        <div class="book_detail">
                            <div class="book_title">
                                実践で学ぶSEO入門
                            </div>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_status unread">
                                    <input type="submit" name="submit_book_unread" value="未読">
                                </div>
                                <div class="book_status reading">
                                    <input type="submit" name="submit_book_reading" value="読中">
                                </div>
                                <div class="book_status finished active">
                                    <input type="submit" name="submit_book_finished" value="読了">
                                </div>
                            </form>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_delete">
                                  <input type="submit" name="submit_book_delete" value="削除する"><img src="images/icon_trash.png" alt="icon trash">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="book_item">
                        <div class="book_image">
                            <img src="./images/item_book_3.jpg" alt="">
                        </div>
                        <div class="book_detail">
                            <div class="book_title">
                                演習Webアプリケーション開発
                            </div>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_status unread active">
                                    <input type="submit" name="submit_book_unread" value="未読">
                                </div>
                                <div class="book_status reading">
                                    <input type="submit" name="submit_book_reading" value="読中">
                                </div>
                                <div class="book_status finished">
                                    <input type="submit" name="submit_book_finished" value="読了">
                                </div>
                            </form>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_delete">
                                  <input type="submit" name="submit_book_delete" value="削除する"><img src="images/icon_trash.png" alt="icon trash">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="book_item">
                        <div class="book_image">
                            <img src="./images/item_book_4.jpg" alt="">
                        </div>
                        <div class="book_detail">
                            <div class="book_title">
                                詳しい解説付き！HTML5
                            </div>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_status unread active">
                                    <input type="submit" name="submit_book_unread" value="未読">
                                </div>
                                <div class="book_status reading">
                                    <input type="submit" name="submit_book_reading" value="読中">
                                </div>
                                <div class="book_status finished">
                                    <input type="submit" name="submit_book_finished" value="読了">
                                </div>
                            </form>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_delete">
                                  <input type="submit" name="submit_book_delete" value="削除する"><img src="images/icon_trash.png" alt="icon trash">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="book_item">
                        <div class="book_image">
                            <img src="./images/item_book_5.jpg" alt="">
                        </div>
                        <div class="book_detail">
                            <div class="book_title">
                                みんなのプログラミング講座
                            </div>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_status unread active">
                                    <input type="submit" name="submit_book_unread" value="未読">
                                </div>
                                <div class="book_status reading">
                                    <input type="submit" name="submit_book_reading" value="読中">
                                </div>
                                <div class="book_status finished">
                                    <input type="submit" name="submit_book_finished" value="読了">
                                </div>
                            </form>
                            <form action="bookshelf_index.php" method="post">
                                <div class="book_delete">
                                  <input type="submit" name="submit_book_delete" value="削除する"><img src="images/icon_trash.png" alt="icon trash">
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php //繰り返し終了 ?>
                </div>
            </div>
        </div>
        <footer>
            <small>© 2019 Bookshelf.</small>
        </footer>
    </body>