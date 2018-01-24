<style>
    .control {
        padding-bottom: 4px;
    }

    .employees {
        width: 300px;
        margin-left: 12px;
    }

    .employee {
        border: 1px solid black;
        padding: 4px 4px 4px 4px;
        margin-bottom: 8px;
    }

    .employee .name {
        font-size: 14pt;
    }

    .employee .position {
        display: block;
    }

    .employee .hireDate {
        display: block;
        font-size: 10pt;
    }

    .employee .id {
        color: green;
    }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="controls">
    <div class="control">Search:
        <input type="text" name="search" id="search" />
    </div>
    <div class="control">Sort:
        <select name="sort" id="sort">
      <option value="Name">Name</option>
      <option value="Hire Date">Hire Date</option>
      <option value="Position">Position</option>
      <option value="ID">ID</option>
    </select>
    </div>
</div>
<div id="employees"></div>

<script>
    var employeesById = {
        "8110923": {
            "Name": "John Glanton",
            "Position": "Chief Executive",
            "Hire Date": "2008-01-15"
        },
        "7734981": {
            "Name": "Samuel Chamberlain",
            "Position": "Sales",
            "Hire Date": "2012-05-01"
        },
        "3400981": {
            "Name": "Louis Toadvine",
            "Position": "Customer Support",
            "Hire Date": "2011-08-24"
        },
        "5517823": {
            "Name": "Ben Tobin",
            "Position": "Developer",
            "Hire Date": "2013-03-19"
        },
        "4587234": {
            "Name": "David Brown",
            "Position": "Director of HR",
            "Hire Date": "2012-01-10"
        }
    };

    var employeesArray = Object.keys(employeesById).map(function(v) {
        return $.extend({
            ID: v
        }, employeesById[v]);
    });

    displayData(employeesArray); // initial display of data

    function displayData(employees) {
        var wrapper = $('#employees').empty();
        employees.forEach(function(employee) {
            var empDiv = $('<div class="employee"></div>');
            wrapper.append(empDiv);
            empDiv.append('<span class="name">' + employee.Name + ' ' + '</span>');
            empDiv.append('<span class="position">' + employee.Position + ' ' + '</span>');
            empDiv.append('<span class="hireDate">' + employee['Hire Date'] + ' ' + '</span>');
            empDiv.append('<span class="id">' + employee.ID + ' ' + '</span>');
        });
    }

    $("#sort").on("change", function() {
        var field = this.value;
        if (field === "ID")
            employeesArray.sort(function(a, b) {
                return a[field] - b[field];
            });
        else
            employeesArray.sort(function(a, b) {
                return a[field].localeCompare(b[field]);
            });
        displayData(employeesArray);
    });

</script>
