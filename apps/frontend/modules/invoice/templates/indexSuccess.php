<h1>Invoicess List</h1>

<table>
  <thead>
    <tr>
      <th>Invoice</th>
      <th>Company</th>
      <th>Issued date</th>
      <th>Service name</th>
      <th>Sold date</th>
      <th>Customer</th>
      <th>Price netto</th>
      <th>Price brutto</th>
      <th>Value tax</th>
      <th>Tax</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($invoicess as $invoices): ?>
    <tr>
      <td><a href="<?php echo url_for('invoice/show?invoice_id='.$invoices->getInvoiceId()) ?>"><?php echo $invoices->getInvoiceId() ?></a></td>
      <td><?php echo $invoices->getCompanyId() ?></td>
      <td><?php echo $invoices->getIssuedDate() ?></td>
      <td><?php echo $invoices->getServiceName() ?></td>
      <td><?php echo $invoices->getSoldDate() ?></td>
      <td><?php echo $invoices->getCustomerId() ?></td>
      <td><?php echo $invoices->getPriceNetto() ?></td>
      <td><?php echo $invoices->getPriceBrutto() ?></td>
      <td><?php echo $invoices->getValueTax() ?></td>
      <td><?php echo $invoices->getTax() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('invoice/new') ?>">New</a>
