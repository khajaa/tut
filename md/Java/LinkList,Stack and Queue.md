
##LinkList,Stack and Queue

###Download


###Node.java
```java
 	private int mVal;
 	private Node mNext;
 	public Node() {
 		mVal = 0;
 		mNext = null;
 	}
 
 	public Node(int val) {
 		mVal = val;
 		mNext = null;
 	}
 
 	public Node(Node next, int val) {
 		mVal = val;
 		mNext = next;
 	}
 
 	public Node getNext() {
 		return mNext;
 	}
 
 	public int getVal() {
 		return mVal;
 	}
 	
 	public void setNext(Node next) {
 		mNext = next;
 	}
 
 	public void setVal(int val) {
 		mVal = val;
 	}
 }
 ```
###LinkList.java
```java
 
 	private Node mHead;
 	private int mSize;
 
 	public LinkList() {
 		mHead = new Node();
 		mSize = 0;
 	}
 
 	public void insert(Node node) throws Exception {
 		insert(node, 0);
 	}
 
 	public void insert(Node node, int pos) throws Exception {
 		if (pos < 0 || pos > mSize) {
 			throw new Exception("Invalid position");
 		}
 
 		Node tmp = mHead;
 		for (int i=0; i<pos; i++) {
 			tmp = tmp.getNext();
 		}
 		node.setNext(tmp.getNext());
 		tmp.setNext(node);
 		mSize++;
 	}
 
 	public void remove() throws Exception {
 		remove(0);
 	}
 
 	public void remove(int pos) throws Exception {
 		if (mSize <= 0) {
 			throw new Exception("Link List is empty");
 		}
 		if (mSize < pos || pos < 0) {
 			throw new Exception("Invalid position");
 		}
 
 		Node tmp = mHead;
 		for (int i=1; i<pos; i++) {
 			tmp = tmp.getNext();
 		}
 		tmp.setNext(tmp.getNext().getNext());
 		mSize--;
 	}
 	
 	public void print() {
 		System.out.print("Size=" + mSize + ": ");
 		Node tmp = mHead.getNext();
 		while (tmp != null) {
 			System.out.print(tmp.getVal() + "->");
 			tmp = tmp.getNext();
 		}
 		System.out.println("NULL");
 	}
 
 	public int getSize() {
 		return mSize;
 	}
 
 	public Node getNode(int pos) throws Exception {
 		if (mSize <= 0) {
 			throw new Exception("Link List is empty");
 		}
 		if (mSize < pos || pos < 0) {
 			throw new Exception("Invalid position");
 		}
 
 		Node tmp = mHead.getNext();
 		for (int i=0; i<pos; i++) {
 			tmp = tmp.getNext();
 		}
 		return tmp;
 	}
 }
 ```
###Queue.java
```java
 	private LinkList mList;
 	public Queue() {
 		mList = new LinkList();
 	}
 
 	public void enqueue(int val) throws Exception {
 		mList.insert(new Node(val));
 	}
 
 	public int dequeue() throws Exception {
 		int retVal = mList.getNode(mList.getSize()-1).getVal();
 		mList.remove(mList.getSize());
 		return retVal;
 	}
 
 	public void print() {
 		mList.print();
 	}
 }
 ```
###Stack.java
```java
 	private LinkList mList;
 	public Stack() {
 		mList = new LinkList();
 	}
 
 	public void push(int val) throws Exception {
 		mList.insert(new Node(val));
 	}
 
 	public int pop() throws Exception {
 		int retVal = mList.getNode(0).getVal();
 		mList.remove();
 		return retVal;
 	}
 
 	public void print() {
 		mList.print();
 	}
 }
 ```
###Test.java
```java
 	public static void main(String args[]) {
 		try {
 			System.out.println("================= Link List ===============");
 			LinkList list = new LinkList();
 			list.insert(new Node(5),0);
 			list.print();
 			list.insert(new Node(187));
 			list.print();
 			list.insert(new Node(90),list.getSize());
 			list.print();
 			list.insert(new Node(58),2);
 			list.print();
 			list.insert(new Node(165),list.getSize());
 			list.print();
 			list.remove(list.getSize());
 			list.print();
 			list.remove(0);
 			list.print();
 			list.remove(1);
 			list.print();
 			list.remove(1);
 			list.print();
 			list.remove();
 			list.print();
 
 
 			System.out.println("================= Queue ===============");
 			Queue queue = new Queue();
 			queue.enqueue(5);
 			queue.print();
 			queue.enqueue(12);
 			queue.print();
 			queue.enqueue(9);
 			queue.print();
 			queue.enqueue(7);
 			queue.print();
 			queue.enqueue(15);
 			queue.print();
 			queue.dequeue();
 			queue.print();
 			queue.dequeue();
 			queue.print();
 			queue.dequeue();
 			queue.print();
 			queue.dequeue();
 			queue.print();
 			queue.dequeue();
 			queue.print();
 
 			System.out.println("================= Stack ===============");
 			Stack stack = new Stack();
 			stack.push(5);
 			stack.print();
 			stack.push(12);
 			stack.print();
 			stack.push(9);
 			stack.print();
 			stack.push(7);
 			stack.print();
 			stack.push(15);
 			stack.print();
 			stack.pop();
 			stack.print();
 			stack.pop();
 			stack.print();
 			stack.pop();
 			stack.print();
 			stack.pop();
 			stack.print();
 			stack.pop();
 			stack.print();
 
 		}
 		catch (Exception ex) {
 			System.out.println("ERROR");
 			System.out.println(ex.getMessage());
 		}
 
 	}
 }
 ```



