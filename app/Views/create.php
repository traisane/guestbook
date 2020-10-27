<h3><?= $title ?></h3>
<form action="/home/create">
    <div>
        <?= Config\Services::validation()->listErrors(); ?>
    </div>
    <div>
        <label>Type message here</label>
    </div>
    <div>
        <textarea name="content"></textarea>
    </div>
    <button>Post</button>
</form>