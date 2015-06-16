

<span ng-click="categoryAdd()">add</span>

<div ng-repeat="x in category_list">
    {{ x.category_name }} <input type="button" ng-click="categoryEdit(x.category_id)" value="edit">
    
</div>