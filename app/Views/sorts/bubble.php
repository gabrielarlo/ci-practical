<div class="bg-light p-4 mb-4">
  <b>Items to sort via <?= esc($title) ?>:</b> [<?= esc($items) ?>]
</div>
<div class="bg-light p-4">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Pass</th>
        <th scope="col">Items</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($passes as $key => $value) { ?>
        <tr>
          <th scope="row"><?= esc($key + 1) ?></th>
          <td><?= esc($value) ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>