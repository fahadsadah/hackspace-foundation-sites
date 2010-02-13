<? 
$page = 'reports';
$title = 'January 2010';
require('../header.php'); 
?>
<h2>Hackspace Foundation report &mdash; <?=$title?></h2>

<p>Lots of purchases hit the bank this month: Makerbot, shelving, soldering station.</p>

<h3>Stats</h3>
<table>
    <tr><th>Registered Users</th><td>128</td></tr>
    <tr><th>Foundation Members</th><td>38</td></tr>
</table>

<h3>Income Statement</h3>
<table class="financial">
    <tr><th colspan="2">Revenues</th></tr>
    <tr><td class="sub">Subscriptions</td><td class="amount">£755.00</td></tr>
    <tr><td>Total Revenue</td><td class="amount">£755.00</td></tr>
    <tr><th colspan="2">Expenses</th></tr>
    <tr><td class="sub">Equipment</td><td class="amount">£94.32</td></tr>
    <tr><td class="sub">Rent</td><td class="amount">£420.00</td></tr>
    <tr><td>Total Expenses</td><td class="amount">£514.32</td></tr>
    <tr><th>Net Income</th><td class="amount">£240.68</td></tr>
    <tr></tr>
</table>

<h3>Balance Sheet</h3>
<table class="financial">
    <tr><th colspan="2">Assets</th></tr>
    <tr><th colspan="2" class="sub">Current Assets</th></tr>
    <tr><td class="sub2">Petty Cash</td><td class="amount">£132.96</td></tr>
    <tr><td class="sub2">Cash in Bank</td><td class="amount">£2,979.40</td></tr>
    <tr><td class="sub">Fixed Assets</td><td class="amount">£1,675.79</td></tr>
    <tr><td>Total Assets</td><td class="amount">£4,788.15</td></tr>
    <tr><th colspan="2">Liabilities</th></tr>
    <tr><td class="sub2">Donations (Leeds)</td><td class="amount">£726.90</td></tr>
    <tr><td>Total Liabilities</td><td class="amount">£726.90</td></tr>
    <tr><th colspan="2">Equity</th></tr>
    <tr><td>Retained Earnings</td><td class="amount">£4,061.25</td></tr>
    <tr><td>Total Equity</td><td class="amount">£4,061.25</td></tr>
    <tr><th>Total Liabilites and Equity</th><td class="amount">£4,788.15</td></tr>
    <tr></tr>
</table>

<? require('../footer.php'); ?>
