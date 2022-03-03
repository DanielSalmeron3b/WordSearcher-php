<!DOCTYPE html>
<html lang="es">

<head>
    <title>Word Searcher</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <div>
        <section></section>
        <header>
            <h1>Using<span> Regular Expressions</span></h1>
        </header>
        <div>
            <section>
                <div>
                    <h2>Word Searcher</h2>
                    <section>
                        <?php
                        if (isset($_POST['Submit'])) {
                            $text = $_POST['comment'];
                            $word = $_POST['word'];

                            $text = preg_replace("/\b(".$word.")\b/i", '<span style="background:#5fc9f6">\1</span>',$text);
                        ?>
                            <div>
                                <h2>Result</h2>
                                <p><?=$text?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </section>
                    <div class="clear"></div>
                    <article class="post">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
                            <p class="textfield">
                                <label for="word">
                                    <small>Word to search</small>
                                </label>
                                <input type="word" id="word" value="" size="22" tabindex="1" type="text">
                            </p>
                            <p>
                                <small>Add your text to proccess it using
                                    <strong> regular expressions</strong>
                                </small>
                            </p>
                        
                                <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
                            
                            <p>
                                <input name="Submit" id="Submit" value="1" type="hidden">
                                <input name="submit" id="submit" tabindex="5" type="submit" value="SUBMIT" >
                            </p>
                            <div class="clear"></div>
                        </form>
                        <div class="clear"></div>
                    </article>
                </div>
            </section>
            <div class="clear"></div>
        </div>
    </div>
    <footer id="pagefooter">
        <div id="footerwrap">
        </div>
    </footer>
</body>