<html>
    <head>
        <meta charset="utf-8">
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="new-section-form228" class="form-horizontal" enctype="multipart/form-data">
            <div class="input-group">
                <span class="input-group-addon">Section type</span>
                <select name="sectionType" class="form-control">
                    <option value="simple">Simple</option>
                    <option value="saab">Coming soon more....</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control" name="sectionName">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Use table</span>
                <input type="text" class="form-control" name="usingTable">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-default" type="reset">Reset</button>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        
         <script src="/test-cms/bower_components/jquery/dist/jquery.min.js"></script>
        {include file='../../smarty/templates/footer.tpl'}