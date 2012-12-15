<form class="form-signin" method="post">
    <h2 class="form-signin-heading">Enter your Tweet</h2>
    <textarea name="tweet" rows="3" placeholder="Write your text"></textarea>
    </br>
    <button class="btn btn-large btn-primary" type="submit">Tweet</button>
</form>

<h2>Tweets</h2>
<table class="Table table-striped table-bordered">
    <thead>
    <tr>
        <td>Time</td>
        <td>Tweet</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tweets as $tweet): ?>

    <tr>
        <td><?php echo $tweet->created ?></td>
        <td><?php echo $tweet->content ?></td>
    </tr>
        <?php endforeach?>
    </tbody>
</table>