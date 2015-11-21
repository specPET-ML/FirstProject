<table>
  <tbody>
    <tr>
      <th>Customer:</th>
      <td><?php echo $customers->getCustomerId() ?></td>
    </tr>
    <tr>
      <th>Customer name:</th>
      <td><?php echo $customers->getCustomerName() ?></td>
    </tr>
    <tr>
      <th>Customer adress:</th>
      <td><?php echo $customers->getCustomerAdress() ?></td>
    </tr>
    <tr>
      <th>Customer zip code:</th>
      <td><?php echo $customers->getCustomerZipCode() ?></td>
    </tr>
    <tr>
      <th>Customer city:</th>
      <td><?php echo $customers->getCustomerCity() ?></td>
    </tr>
    <tr>
      <th>Customer nip:</th>
      <td><?php echo $customers->getCustomerNip() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('customer/edit?customer_id='.$customers->getCustomerId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('customer/index') ?>">List</a>
