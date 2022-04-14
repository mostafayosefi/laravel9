@component('indexhost.layouts.content', [
    'title' => $mypage->title ,
    'tabTitle' => $mypage->title ,
    'breadcrumb' => [['title' => $mypage->title , 'class' => 'active']],
    'calass_index' => 'domain',
    ])





    <section id="domian-search">
        <div class="container">
            <div class="row row-reverse">
                <?php echo $mypage->text; ?>
            </div>
        </div>
    </section>



@endcomponent
