<header class="masthead" style="background-image: url('/blog/public/images/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Блог</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <img src='/blog/public/materials/<?php echo $val['id']; ?>.jpg' width="150" height="100" onerror="this.style.display='none' "alt="photo">
                        <a href="/blog/post/<?php echo $val['id']; ?>">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars(substr($val['text'], 0, 300), ENT_QUOTES); ?></h5>
                        </a>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-10 mx-auto">
            <table class="table">
                <tr>
                    <th><h2>Топ постов недели</h2></th>
                </tr>
                <?php foreach ($top_list as $val): ?>
                    <tr>
                        <td class="post-preview"><a href="/blog/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>