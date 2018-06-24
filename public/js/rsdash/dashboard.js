var Dashboard = function ()
{
    //-----------------------------------------------------------------------------------------------------------------

    this.__construct = function () {
        console.log('Dashboard created');
        Template = new Template();
        load_project();
        Event = new Event();

        //Result = new Result();




    };

    //-----------------------------------------------------------------------------------------------------------------

    var load_project = function () {

        $.get('api/get_project',function (o) {

            var output="<tbody>";

            for (var i=0;i<o.length;i++){

                output+= Template.project(o[i]);



            }
            output+="</tbody>";
            $("#table").html(output);



        },'json');
    };

    //------------------------------------------------------------------------------------------------------------------

    var load_event = function () {

    };

    //------------------------------------------------------------------------------------------------------------------

    var create_project =function () {

    };

    //------------------------------------------------------------------------------------------------------------------


    this.__construct();


};