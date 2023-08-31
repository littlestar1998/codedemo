package main

import "fmt"

//	func main() {
//		var a = 10
//		tt(a)
//		fmt.Println(a)
//	}

var a = 10

func main() {
	tt(a)
	fmt.Println(a)
}

func tt(a int) {
	a = 20
}
