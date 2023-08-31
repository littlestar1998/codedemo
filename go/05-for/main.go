package main

import "fmt"

//func main() {
//	a := 1
//	for {
//		if a > 10 {
//			break
//		}
//		a++
//		fmt.Println(a)
//	}
//}

//func main() {
//	sum := 0
//	for i := 0; i <= 10; i++ {
//		sum += i
//		fmt.Println(sum, i)
//	}
//	fmt.Println(sum)
//}

func main() {
	var c int
	var flag bool
	for {
		for {
			c++
			if c > 5 {
				flag = true
				break
			}
		}
		if flag {
			fmt.Println("循环结束")
			break
		}
	}
}
