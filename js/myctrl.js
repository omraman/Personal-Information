

app.controller('myctrl', function($scope, $http) 
{

    select(); 
    $scope.updatebtn = false;
    $scope.addbtn = true;
    function select()
    {
        $http.get("process/select.php").success(function(data) 
        {
            $scope.items = data;
        
        });
    }


    $scope.insert = function() 
    {
        $http.post("process/insert.php", {fname: $scope.fname, email: $scope.email, password: $scope.password }).
        success(function(data, status, headers, config)
         {
           alert('data insterted');
         });

        $scope.fname = "";
        $scope.email = "";
        $scope.password = "";
    }

    $scope.delete = function(item) 
        {
            $http.post("process/delete.php", { id: item }).
            success(function(data, status, headers, config) 
            {
                select(); 
                alert('deleted');
            });
        }


  $scope.edit = function(id, fname, email, password) 
    {
        
        $scope.updatebtn = true;
        $scope.addbtn = false;


        $scope.id = id;
        $scope.fname = fname;
        $scope.email = email;
        $scope.password = password;
    }
    $scope.update = function()
     {

        $http.post("process/update.php", { id: $scope.id, fname: $scope.fname, email: $scope.email, password: $scope.password }).
        success(function(data, status, headers, config) 
        {

            select(); 
            alert('updated');
        });

        $scope.fname = "";
        $scope.email = "";
        $scope.password = "";

        $scope.updatebtn = false;
        $scope.addbtn = true;
    }
});

