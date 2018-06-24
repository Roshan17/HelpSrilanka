var Template = function ()
{
    //-----------------------------------------------------------------------------------------------------------------
    this.__construct = function () {
        console.log('Template Created')
    };

    //-----------------------------------------------------------------------------------------------------------------

    this.project = function (obj) {
        var output='';
        output+="<tr><td><div class='checkbox'><label><input type=\"checkbox\" name=\"optionsCheckboxes\" checked></label></div></td>";
        output+="<td>"+obj.content+"</td>";
        output+="<td class=\"td-actions text-right\">";
        output+="<button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-primary btn-simple btn-xs\">";
        output+="<i class=\"material-icons\">edit</i>";
        output+="</button>";
        output+="<button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">";
        output+=" <i class=\"material-icons\">close</i></button> </td></tr>";
        return output;
    };




    this.event = function (obj) {

        var output='';
        output+="<tr><td><div class='checkbox'><label><input type=\"checkbox\" name=\"optionsCheckboxes\" checked></label></div></td>";
        output+="<td>"+obj.content+"</td>";
        output+="<td class=\"td-actions text-right\">";
        output+="<button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-primary btn-simple btn-xs\">";
        output+="<i class=\"material-icons\">edit</i>";
        output+="</button>";
        output+="<button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">";
        output+=" <i class=\"material-icons\">close</i></button> </td></tr>";
        return output;

    };

    this.__construct();
};






