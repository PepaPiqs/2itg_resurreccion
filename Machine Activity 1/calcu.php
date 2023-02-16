<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>2609</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bakbak+One&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belgrano&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Berkshire+Swash&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Inline&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Shade&amp;display=swap">
</head>

<body>
    <div class="container border rounded" style="background: #fffb95;height: 590px;margin-top: 20px;">
        <h1 class="text-center" style="margin-top: 20px;padding-top: 30px;font-family: 'Berkshire Swash', serif;font-weight: bold;">Marcos Magnanakaw: Tax Calculator</h1>
        <form>
            <div class="text-center" style="margin-top: 60px;">
                <p style="font-size: 25px;font-family: Belgrano, serif;">Salary:&nbsp;<center><input class="form-control" type="text" style="width: 400px;text-align: center;" name="annual" required oninput="this.value = this.value.replace(/[^0-9.]/g, &#39;&#39;).replace(/(\..*)\./g, &#39;$1&#39;);"></center></p>
                <p style="margin-top: 30px;font-size: 25px;font-family: Belgrano, serif;">Type:&nbsp;<input type="radio" id="monthly" class="monthly" value="monthly" style="margin-left: 25px;" name="radio1" required><label class="form-label" for="monthly" style="margin-left: 10px;">Monthly</label><input type="radio" id="bimonth" value="bimonth" class="bimonth" style="margin-left: 25px;" name="radio1" required><label class="form-label" for="bimonth" style="margin-left: 10px;">Bi-Monthly</label></p><button class="btn btn-primary" type="submit" name="submit" value="submit" style="margin-bottom: 20px;margin-top: 0px;font-size: 26px;font-family: Belgrano, serif;background: #9599ff;border-color: #9599ff;">Compute</button>

            </div>
        </form>
        <?php
            if(isset($_GET['submit']))
            {
                $excess;
                $annualTax;
                $monthlyTax;
                $salary = $_GET['annual'];
                $choice1 = $_GET['radio1'];
                if($choice1 == "monthly")
                {
                    $salary*=12;
                    if($salary<=250000.0)
                    {
                        $annualTax=0.0;
                        $monthlyTax=0.0;
                    }
                    else if($salary>250000.0 && $salary<=400000.0)
                    {
                        $excess=$salary-250000.0;
                        $annualTax = $excess*0.2;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >400000.0 && $salary <= 800000.0)
                    {
                        $excess =  $salary-400000.0;
                        $annualTax = 30000+$excess*0.25;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >800000.0 && $salary <= 2000000.0)
                    {
                        $excess =  $salary-800000.0;
                        $annualTax = 130000+$excess*0.30;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >2000000.0 && $salary <= 8000000000.0)
                    {
                        $excess =  $salary-2000000.0;
                        $annualTax = 490000+$excess*0.32;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >8000000.0)
                    {
                        $excess =  $salary-8000000.0;
                        $annualTax = 2410000+$excess*0.35;
                        $monthlyTax = $annualTax/12;
                    }
                    $salary = number_format($salary, 2, '.', ',');
                    $annualTax = number_format($annualTax, 2, '.', ',');
                    $monthlyTax = number_format($monthlyTax, 2, '.', ',');

                    echo "<center><font size='6pt'> Annual Salary: PHP $salary <br></center></font>"; 
                    echo "<center><font size='6pt'> Est Annual Tax: PHP $annualTax<br></center></font>";
                    echo "<center><font size='6pt'> Est Monthly Tax: PHP $monthlyTax<br></center></font>";
                }
                if($choice1 == "bimonth")
                {
                    $salary*=24;
                    if($salary<=250000.0)
                    {
                        $monthlyTax = 0.0;
                        $annualTax =0.0;
                    }
                    else if($salary >250000.0 && $salary <= 400000.0)
                    {
                        $excess =  $salary-250000.0;
                        $annualTax = $excess*0.2;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >400000.0 && $salary <= 800000.0)
                    {
                        $excess =  $salary-400000.0;
                        $annualTax = 30000+$excess*0.25;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >800000.0 && $salary <= 2000000.0)
                    {
                        $excess =  $salary-800000.0;
                        $annualTax = 130000+$excess*0.30;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >2000000.0 && $salary <= 8000000000.0)
                    {
                        $excess =  $salary-2000000.0;
                        $annualTax = 490000+$excess*0.32;
                        $monthlyTax = $annualTax/12;
                    }
                    else if($salary >8000000.0)
                    {
                        $excess =  $salary-8000000.0;
                        $annualTax = 2410000+$excess*0.35;
                        $monthlyTax = $annualTax/12;
                    }
                    $salary = number_format($salary, 2, '.', ',');
                    $annualTax = number_format($annualTax, 2, '.', ',');
                    $monthlyTax = number_format($monthlyTax, 2, '.', ',');

                    echo "<center><font size='6pt'> Annual Salary: PHP $salary <br></center></font>"; 
                    echo "<center><font size='6pt'> Est Annual Tax: PHP $annualTax<br></center></font>";
                    echo "<center><font size='6pt'> Est Monthly Tax: PHP $monthlyTax<br></center></font>";
                    }
                }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>