<h1>Companiess List</h1>

<table>
  <thead>
    <tr>
      <th>Company</th>
      <th>Company name</th>
      <th>Company adress</th>
      <th>Company zip code</th>
      <th>Company city</th>
      <th>Company nip</th>
      <th>Company bank name</th>
      <th>Company bank account</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companiess as $companies): ?>
    <tr>
      <td><a href="<?php echo url_for('company/show?company_id='.$companies->getCompanyId()) ?>"><?php echo $companies->getCompanyId() ?></a></td>
      <td><?php echo $companies->getCompanyName() ?></td>
      <td><?php echo $companies->getCompanyAdress() ?></td>
      <td><?php echo $companies->getCompanyZipCode() ?></td>
      <td><?php echo $companies->getCompanyCity() ?></td>
      <td><?php echo $companies->getCompanyNip() ?></td>
      <td><?php echo $companies->getCompanyBankName() ?></td>
      <td><?php echo $companies->getCompanyBankAccount() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('company/new') ?>">New</a>
