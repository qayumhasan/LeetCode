function rotate(&$nums, $k)
    {
        $n = count($nums);
        $k = $k % $n;
        // if user input k more then number of array value then it will fix this
        revers($nums,0,$n-1);
        revers($nums,0,$k-1);
        revers($nums,$k,$n-1);
    }
    
    function revers(&$nums,$start , $end)
    {
        while ($start < $end) {
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start ++;
            $end --;
        }
    }

    $arr = [1,2,3,4,5,6,7];
    
    $k = 3;
    rotate($arr,$k);
