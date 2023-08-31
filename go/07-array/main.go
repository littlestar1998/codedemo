package main

import (
	"fmt"
	"strconv"
)

//func main() {
//	var aa = [5]int{1, 2, 3, 1, 3}
//
//	for _, v := range aa {
//		fmt.Println(v)
//
//	}
//}

func main() {
	var aa = [5]int{1, 2, 3, 1, 3}
	fmt.Println(aa[0])
	fmt.Println(aa[4])

	for _, v := range aa {
		fmt.Printf(strconv.Itoa(v) + "\n")
	}
}
