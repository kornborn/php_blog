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
        <div class="col-md-8">
            <?php if (empty($list)) : ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="card mb-3">
                        <div class="card-header">
                                <a href="/blog/post/<?php echo $val['id']; ?>">
                                    <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                                </a>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <?php if (!empty($val['image'])) : ?>
                                        <div class="col-3">
                                                <img src='/blog/public/materials/<?php echo $val['id']; ?>.jpg'
                                                     class="img-fluid" onerror="this.style.display='none' " alt="photo">
                                        </div>
                                        <div class="col-9">
                                            <a href="/blog/post/<?php echo $val['id']; ?>">
                                                <?php echo mb_substr($val['text'], 0, 300); ?>
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div>
                                            <a href="/blog/post/<?php echo $val['id']; ?>">
                                                <?php echo mb_substr($val['text'], 0, 300); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($list)) : ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">Топовые посты недели</div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($top_list as $val): ?>
                            <li class="list-group-item"><a href="/blog/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>