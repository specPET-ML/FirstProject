<h1>Customerss List</h1>

<table>
  <thead>
    <tr>
      <th>Customer</th>
      <th>Customer name</th>
      <th>Customer adress</th>
      <th>Customer zip code</th>
      <th>Customer city</th>
      <th>Customer nip</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customerss as $customers): ?>
    <tr>
      <td><a href="<?php echo url_for('customer/show?customer_id='.$customers->getCustomerId()) ?>"><?php echo $customers->getCustomerId() ?></a></td>
      <td><?php echo $customers->getCustomerName() ?></td>
      <td><?php echo $customers->getCustomerAdress() ?></td>
      <td><?php echo $customers->getCustomerZipCode() ?></td>
      <td><?php echo $customers->getCustomerCity() ?></td>
      <td><?php echo $customers->getCustomerNip() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('customer/new') ?>">New</a>
