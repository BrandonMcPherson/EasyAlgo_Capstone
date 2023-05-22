const quizData = [
    {
        question: "What principle governs stack deletion?",
        a: "LIFO; Last In First Out",
        b: "FIFO; First in First Out",
        c: "FILO; First In Last Out",
        d: "LILO; Last in Last Out",
        correct: "a",
    },

    {
        question: "Which of the following statements is true?",
        a: "Random access of elements at a linked list is not possible",
        b: "Arrays have better cache locality than a linked list",
        c: "The size of a linked list is dynamic and can be changed as needed",
        d: "All of the above",
        correct: "d",
    },

    {
        question: "What principle governs queue deletion?",
        a: "FILO; First In Last Out",
        b: "FIFO; First in First Out",
        c: "LIFO; Last In First Out",
        d: "LILO; Last in Last Out",
        correct: "b",
    },

    {
        question: "Which of the following data structure is non linear type?",
        a: "Graphs",
        b: "Stacks",
        c: "Lists",
        d: "Queue",
        correct: "a",
    },

    {
        question: "Which method inserts an element?",
        a: "Pop()",
        b: "Push()",
        c: "IsEmpty()",
        d: "Peek()",
        correct: "b",
    },

    {
        question: "q is a queue with the entries {4,8,7,6,4,2} (4 is the head and 2 the tail) which of the following represents q after 2 deletions and 9 inserted?",
        a: "{4,8,7,6,9}",
        b: "{7,6,4,2,9}",
        c: "{8,7,6,4,9}",
        d: "{9,7,6,4,2}",
        correct: "b",
    },

    {
        question: "All the following are linear data structures except:",
        a: "Queue",
        b: "Array",
        c: "Stack",
        d: "Tree",
        correct: "d",
    },

    {
        question: "What is the maximum number of leaves of a balanced tree of height 5?",
        a: "64",
        b: "63",
        c: "32",
        d: "60",
        correct: "b",
    },

    {
        question: "When a binary tree is represented as an array, for any node rooted at n, what is the position of the left sub-tree?",
        a: "2n+2",
        b: "n",
        c: "2n",
        d: "2n-1",
        correct: "c",
    },

    {
        question: "Which of the following describes a post order traversal of a BST?",
        a: "Left subtree, Right subtree, Root",
        b: "Root, Left subtree, Right subtree",
        c: "Right subtree, Left subtree, Root",
        d: "Left subtree, Right subtree, Root",
        correct: "d",
    },

    {
        question: "Which of the following is FALSE about a binary heap?",
        a: "All levels of the tree except possibly the deepest are fully filled",
        b: "Nodes are filled from right to left",
        c: "The element contained by each node is greater than or equal to the elements of it’s children",
        d: "Accessing the root takes O(1) time",
        correct: "b",
    },

    {
        question: "Which of the following IS NOT a standard operation on a binary heap?",
        a: "decreaseKey()",
        b: "getMin()",
        c: "insert()",
        d: "getMax()",
        correct: "d",
    },

    {
        question: "Which of the following describes a in order traversal of a BST?",
        a: "Left subtree, Root, Right subtree",
        b: "Root, Left subtree, Right subtree",
        c: "Right subtree, Left subtree, Root",
        d: "Left subtree, Right subtree, Root",
        correct: "a",
    },

    {
        question: "What is the height of a tree with 26 leaf nodes?",
        a: "8",
        b: "5",
        c: "4",
        d: "6",
        correct: "b",
    },

    {
        question: "What is the time complexity of a BST?",
        a: "Log(O)",
        b: "2n",
        c: "O(n)",
        d: "None of the above",
        correct: "c",
    },

    {
        question: "Which of the following describes a pre order traversal of a BST?",
        a: "Left subtree, Right subtree, Root",
        b: "Root, Left subtree, Right subtree",
        c: "Right subtree, Left subtree, Root",
        d: "Left subtree, Right subtree, Root",
        correct: "b",
    },

    {
        question: " ______________ is a collection of elements use to store the same type of data.",
        a: "Array",
        b: "Switch",
        c: "Loop",
        d: "Case",
        correct: "a",
    },

    {
        question: "Which of the following is a type of binary heap?",
        a: "Max-heap",
        b: "Min-heap",
        c: "All of the above",
        d: "None of the above",
        correct: "c",
    },

    {
        question: "What is the maximum number of leaves of a tree of height 3?",
        a: "15",
        b: "8",
        c: "36",
        d: "30",
        correct: "a",
    },

    {
        question: "Which of the following information is stored in a doubly-linked list’s nodes?",
        a: "Value of node",
        b: "Address of next node",
        c: "Address of previous node",
        d: "All of the above",
        correct: "d",
    },

    {
        question: "Which of the following describes a leaf node?",
        a: "Children of the root node only",
        b: "Nodes without children",
        c: "Nodes with parent and children nodes",
        d: "None of the above",
        correct: "b",
    },

    {
        question: "Which of the following is true of Red-Black Trees?",
        a: "The root node is always red",
        b: "A black node cannot be the parent or child of another black node",
        c: "The nodes on each level must alternatively be red and black",
        d: "Every path from the root to any of the leaf nodes must have the same number of block nodes",
        correct: "d",
    },

    {
        question: "Which of the following describes a root node?",
        a: "Nodes without children",
        b: "Children of the root node only",
        c: "Node with 0 or more child nodes",
        d: "None of the above",
        correct: "c",
    },

    {
        question: "What is the smallest number of internal nodes in a Red-Black tree with a black height of 4?",
        a: "15",
        b: "18",
        c: "16",
        d: "20",
        correct: "a",
    },

    {
        question: "If the head pointer points to nullptr, this indicates:",
        a: "The list is full and cannot accept any nodes",
        b: "The list is empty",
        c: "Only the first node is empty",
        d: "None of the above",
        correct: "b",
    }
];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})