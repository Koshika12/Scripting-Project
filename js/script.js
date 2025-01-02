// Task 1: Reverse a Number
function reverseNumber(event) {
    event.preventDefault();
    const num = document.getElementById('task1Input').value;
    const reversed = parseFloat(num.toString().split('').reverse().join('')) * Math.sign(num);
    document.getElementById('task1Output').innerText = `Reversed Number: ${reversed}`;
}

// Task 2: Alphabetical Order
function alphabeticalOrder(event) {
    event.preventDefault();
    const str = document.getElementById('task2Input').value;
    const sorted = str.split('').sort().join('');
    document.getElementById('task2Output').innerText = `Sorted String: ${sorted}`;
}

// Task 3: Count Vowels
function countVowels(event) {
    event.preventDefault();
    const str = document.getElementById('task3Input').value;
    const vowelsCount = str.match(/[aeiouAEIOU]/g)?.length || 0;
    document.getElementById('task3Output').innerText = `Number of Vowels: ${vowelsCount}`;
}

// Task 4: Capitalize Words
function capitalizeWords(event) {
    event.preventDefault();
    const str = document.getElementById('task4Input').value;
    const capitalized = str.split(' ').map(word => word[0].toUpperCase() + word.slice(1)).join(' ');
    document.getElementById('task4Output').innerText = `Capitalized String: ${capitalized}`;
}

// Task 5: Get Current Date
function getCurrentDate() {
    const today = new Date();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const yyyy = today.getFullYear();
    document.getElementById('task5Output').innerText = `Current Date: ${mm}-${dd}-${yyyy}`;
}

// Task 6: Days Until Christmas
function daysUntilChristmas() {
    const today = new Date();
    const year = today.getFullYear();
    const christmas = new Date(year, 11, 25); // December 25
    if (today > christmas) christmas.setFullYear(year + 1);
    const daysLeft = Math.ceil((christmas - today) / (1000 * 60 * 60 * 24));
    document.getElementById('task6Output').innerText = `Days Until Christmas: ${daysLeft}`;
}
    

    // Task 8: Larger and Smaller of Two Numbers
    function findLargerSmallerTwo(event) {
        event.preventDefault();
        const numA = parseFloat(document.getElementById('numA').value);
        const numB = parseFloat(document.getElementById('numB').value);
        const larger = Math.max(numA, numB);
        const smaller = Math.min(numA, numB);
        document.getElementById('task8Output').innerText = `
            Larger: ${larger}, Smaller: ${smaller}`;
    }

    // Task 9: Larger and Smaller of Three Numbers
    function findLargerSmallerThree(event) {
        event.preventDefault();
        const numX = parseFloat(document.getElementById('numX').value);
        const numY = parseFloat(document.getElementById('numY').value);
        const numZ = parseFloat(document.getElementById('numZ').value);
        const numbers = [numX, numY, numZ];
        const larger = Math.max(...numbers);
        const smaller = Math.min(...numbers);
        document.getElementById('task9Output').innerText = `
            Larger: ${larger}, Smaller: ${smaller}`;
    }

 

    // Task 13: Join Elements of an Array
    function joinArray() {
        const array = ['JavaScript', 'is', 'fun'];
        const joinedString = array.join(' ');
        document.getElementById('task13Output').innerText = `Joined String: ${joinedString}`;
    }

    // Task 14: Sort Items of an Array
    function sortArray() {
        const array = [3, 8, 7, 6, 5, -4, 3, 2, 1];
        const sortedArray = array.sort((a, b) => a - b);
        document.getElementById('task14Output').innerText = `Sorted Array: ${sortedArray}`;
    }

    // Task 15: Display Colors with Ordinal
    function displayColors() {
        const colors = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
        const ordinals = ["th", "st", "nd", "rd"];
        const result = colors.map((color, index) => {
            const suffix = ordinals[(index + 1) % 10] || ordinals[0];
            return `${index + 1}${suffix} choice is ${color}.`;
        });
        document.getElementById('task15Output').innerText = result.join('\n');
    }

    // Task 16: Odd or Even Numbers
    function checkOddEven() {
        let result = '';
        for (let i = 0; i <= 15; i++) {
            result += `${i} is ${i % 2 === 0 ? 'even' : 'odd'}.\n`;
        }
        document.getElementById('task16Output').innerText = result;
    }

    // Task 17: Largest of Five Numbers
    function findLargestFive() {
        const numbers = prompt("Enter five numbers separated by commas (e.g., 1,2,3,4,5):")
            .split(',')
            .map(Number);
        const largest = Math.max(...numbers);
        alert(`The largest number is ${largest}`);
    }

    // Task 18: Difference Between Two Dates
    function dateDifference(event) {
        event.preventDefault();
        const date1 = new Date(document.getElementById('date1').value);
        const date2 = new Date(document.getElementById('date2').value);
        const difference = Math.abs(date2 - date1) / (1000 * 60 * 60 * 24);
        document.getElementById('task18Output').innerText = `The difference is ${difference} days.`;
    }

    // Task 19: Calculate Age
    function calculateAge(event) {
        event.preventDefault();
        const birthDate = new Date(document.getElementById('birthDate').value);
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const monthDiff = today.getMonth() - birthDate.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        document.getElementById('task19Output').innerText = `Your age is ${age} years.`;
    }
         // Task 20: Time Difference in Days
         function timeDifference(event) {
            event.preventDefault();
            const date1 = new Date(document.getElementById('date1').value);
            const date2 = new Date(document.getElementById('date2').value);
            const difference = Math.abs(date2 - date1) / (1000 * 60 * 60 * 24);
            document.getElementById('task20Output').innerText = `The time difference is ${difference} days.`;
        }

        // Task 21: Get the Weekend Date
        function getWeekendDate() {
            const today = new Date();
            const day = today.getDay();
            let daysUntilWeekend = 6 - day;
            today.setDate(today.getDate() + daysUntilWeekend);
            document.getElementById('task21Output').innerText = `The next weekend date is: ${today.toDateString()}`;
        }

        // Task 22: Check if String is Blank
        function checkBlankString() {
            const input = document.getElementById('task22Input').value;
            if (input.trim() === "") {
                document.getElementById('task22Output').innerText = "The string is blank.";
            } else {
                document.getElementById('task22Output').innerText = "The string is not blank.";
            }
        }

        // Task 23: Remove Specified Number of Characters
        function removeCharacters() {
            const str = document.getElementById('task23Input').value;
            const numChars = parseInt(document.getElementById('numChars').value);
            const result = str.slice(numChars);
            document.getElementById('task23Output').innerText = `Updated string: ${result}`;
        }

        // Task 24: Dog Object
        function createDogObject() {
            const dog = {
                name: "Buddy",
                legs: 4,
                color: "Brown",
                age: 5,
                bark: function() { return "Woof Woof!"; }
            };
            dog.breed = "Labrador";
            dog.getDogInfo = function() { return `Name: ${this.name}, Age: ${this.age}, Breed: ${this.breed}`; };
            console.log(dog);
            document.getElementById('task24Output').innerText = dog.getDogInfo();
        }

        // Task 25: Person Account Object
        function createPersonAccount() {
            const personAccount = {
                firstName: "John",
                lastName: "Doe",
                incomes: [
                    { description: "Salary", amount: 5000 },
                    { description: "Freelance", amount: 1500 }
                ],
                expenses: [
                    { description: "Rent", amount: 1000 },
                    { description: "Utilities", amount: 300 }
                ],
                totalIncome: function() { return this.incomes.reduce((total, income) => total + income.amount, 0); },
                totalExpense: function() { return this.expenses.reduce((total, expense) => total + expense.amount, 0); },
                accountBalance: function() { return this.totalIncome() - this.totalExpense(); },
                accountInfo: function() { return `${this.firstName} ${this.lastName} has a balance of ${this.accountBalance()}`; }
            };
            document.getElementById('task25Output').innerText = personAccount.accountInfo();
        }

        // Task 26: Ten Most Frequent Words
        function tenMostFrequentWords() {
            const inputString = document.getElementById('task26Input').value;
            const words = inputString.split(/\s+/);
            const wordCount = {};
            words.forEach(word => wordCount[word] = (wordCount[word] || 0) + 1);
            const sortedWords = Object.entries(wordCount).sort((a, b) => b[1] - a[1]);
            const mostFrequent = sortedWords.slice(0, 10);
            document.getElementById('task26Output').innerText = `Top 10 words: ${mostFrequent.map(item => item[0]).join(', ')}`;
        }
     
  

      
      