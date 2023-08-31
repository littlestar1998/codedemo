package main

import "fmt"

//func main() {
//	var a []int
//	a = []int{12, 34, 34, 5, 512, 5, 512, 34, 12, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 512, 34, 5, 5}
//	a = append(a, 12)
//	fmt.Println(len(a))
//	fmt.Println(cap(a))
//}

func main() {
	var a []int
	a = []int{12, 34, 34, 5, 512}
	a = a[2:]
	fmt.Println(fmt.Sprintf("%+v", a))

	//a = append(a, 12)
	//fmt.Println(len(a))
	//fmt.Println(cap(a))
}

// 浅拷贝
//func main() {
//	var b []int
//	var a = []int{10}
//	a = append(a, 20)
//	b = a
//	a[0] = 0
//	for _, i := range b {
//		fmt.Println(i)
//	}
//}

// 深拷贝
//func main() {
//	var b []int
//	var a = []int{10}
//	a = append(a, 20)
//	b = make([]int, len(a)) // 分配与 a 相同长度的切片
//	copy(b, a)
//
//	a[0] = 0
//
//	for _, i := range b {
//		fmt.Println(i)
//	}
//}
