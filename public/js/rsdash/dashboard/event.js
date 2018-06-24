var Event = function ()
{
    //-----------------------------------------------------------------------------------------------------------------
    this.__construct = function () {
        console.log('Event Created');
        Template=new Template();
        Result = new Result();
        create_project();
        create_event();
        update_project();
        update_event();
        delete_project();
        delete_event();

    };

    //-----------------------------------------------------------------------------------------------------------------
    var create_project=function () {
        $("#create_project").submit(function (evt) {

            evt.preventDefault();
            var url = $(this).attr('action');
            var postData = $(this).serialize();

            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    Result.success();
                    var output="<tbody>";
                    output+= Template.project(o.data[0]);
                    output+="</tbody>";

                    $("#table").append(output);

                } else {
                    Result.error();
                }

            }, 'json');


        });
    };

            //---------------------------------------------------------------------------------------------------------------

    var create_event=function () {
        $("#create_event").submit(function (evt) {
            console.log('Create event clicked');
            return false;
        });
    };

    //----------------------------------------------------------------------------------------------------------------

    var update_project=function () {

    };

    //---------------------------------------------------------------------------------------------------------------

    var update_event=function () {

    };

    //---------------------------------------------------------------------------------------------------------------
    var delete_project=function () {

    };

    //---------------------------------------------------------------------------------------------------------------

    var delete_event=function () {

    };

    //---------------------------------------------------------------------------------------------------------------

    this.__construct();
}