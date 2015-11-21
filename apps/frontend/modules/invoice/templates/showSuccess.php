<table>
  <tbody>
    <tr>
      <th>Invoice:</th>
      <td><?php echo $invoices->getInvoiceId() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $invoices->getCompanyId() ?></td>
    </tr>
    <tr>
      <th>Issued date:</th>
      <td><?php echo $invoices->getIssuedDate() ?></td>
    </tr>
    <tr>
      <th>Service name:</th>
      <td><?php echo $invoices->getServiceName() ?></td>
    </tr>
    <tr>
      <th>Sold date:</th>
      <td><?php echo $invoices->getSoldDate() ?></td>
    </tr>
    <tr>
      <th>Customer:</th>
      <td><?php echo $invoices->getCustomerId() ?></td>
    </tr>
    <tr>
      <th>Price netto:</th>
      <td><?php echo $invoices->getPriceNetto() ?></td>
    </tr>
    <tr>
      <th>Price brutto:</th>
      <td><?php echo $invoices->getPriceBrutto() ?></td>
    </tr>
    <tr>
      <th>Value tax:</th>
      <td><?php echo $invoices->getValueTax() ?></td>
    </tr>
    <tr>
      <th>Tax:</th>
      <td><?php echo $invoices->getTax() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('invoice/edit?invoice_id='.$invoices->getInvoiceId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('invoice/index') ?>">List</a>
