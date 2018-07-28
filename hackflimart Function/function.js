var arr = [[10,50], [64,100], [44,20], [18, 150]];
const time=100;
    function hackFlipmart (time, arr){
        var maxCost =[];
        
        for (var j=0;j<arr.length;j++){
            var first=arr[j];
             if(first[0] < time ){
                let ntime= time - first[0];
                time=ntime;
                maxCost.push(first[1]);
             } 
        }
        return maxCost;
    }