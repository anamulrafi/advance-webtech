<h3 align="right">
    <a href="{{route('customer.logout')}}">Logout</a>
</h3>

<html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <style>
            .panel{
                color:red;
                background-color:powderblue;
            }
            #row{
                background-color:white;
                border-color: black;
            }
        </style>
    </head>
    <body>
    <br>
        <div class="text-center">
            <h1 style="color:green" align="center">Welcome {{Session::get('logged_name')}}</h1>
        </div>
        <br>

        <table style="border-color:skyBlue; width:40%; height:70%;" align="center" border="4">

        <tr class="panel">
            <td colspan="3" align="center" ><h1>Customer Panel</h1></td>
        </tr>

        <tr id="row">
            <td align="center"> Rooms with price</td>
            <td align="center"><a href ="">Show</a></td>
        </tr>
        <tr id="row">
            <td align="center"> Profile </td>
            <td align="center"><a href ="">Show</a></td>
        </tr>

        <tr id="row">
            <td align="center"> Ask Question</td>
            <td align="center"><a href ="">Ask</a></td>
        </tr>

        <tr id="row">
            <td align="center"> Book Room </td>
            <td align="center"><a href ="">Book</a></td>
        </tr>
        <tr id="row">
            <td align="center"> Reserve for Gym </td>
            <td align="center"><a href ="">Add</a></td>
        </tr>
        <tr id="row">
            <td align="center"> Reserve for Spa</td>
            <td align="center"><a href ="">Add</a></td>
        </tr>

        <tr id="row">
            <td align="center"> Order Foods</td>
            <td align="center"><a href ="">Order</a></td>
        </tr>

        <tr id="row">
            <td align="center">Events</td>
            <td align="center"><a href ="">Show</a></td>
        </tr>
        <tr id="row">
            <td align="center"> Give Review & Rating</td>
            <td align="center"><a href ="">Add</a></td>
        </tr>

        <tr id="row">
            <td align="center">Contact Us</td>
            <td align="center"><a href ="">Mail</a></td>
        </tr>

    </table>
</body>    
</html>