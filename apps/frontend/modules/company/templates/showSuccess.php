<table>
  <tbody>
    <tr>
      <th>Company:</th>
      <td><?php echo $companies->getCompanyId() ?></td>
    </tr>
    <tr>
      <th>Company name:</th>
      <td><?php echo $companies->getCompanyName() ?></td>
    </tr>
    <tr>
      <th>Company adress:</th>
      <td><?php echo $companies->getCompanyAdress() ?></td>
    </tr>
    <tr>
      <th>Company zip code:</th>
      <td><?php echo $companies->getCompanyZipCode() ?></td>
    </tr>
    <tr>
      <th>Company city:</th>
      <td><?php echo $companies->getCompanyCity() ?></td>
    </tr>
    <tr>
      <th>Company nip:</th>
      <td><?php echo $companies->getCompanyNip() ?></td>
    </tr>
    <tr>
      <th>Company bank name:</th>
      <td><?php echo $companies->getCompanyBankName() ?></td>
    </tr>
    <tr>
      <th>Company bank account:</th>
      <td><?php echo $companies->getCompanyBankAccount() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('company/edit?company_id='.$companies->getCompanyId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('company/index') ?>">List</a>
