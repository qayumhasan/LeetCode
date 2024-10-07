   function containsDuplicate($nums) {
        $seen = [];
        foreach ($nums as $num) {
            if(isset($seen[$num])){
                return true;
            }

            $seen[$num] = true;
        }
        return false;
    }
    
    $nums = [1, 2, 3, 4];
    $result = containsDuplicate($nums);
    dump($result);
