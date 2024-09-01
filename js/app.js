// Your Etherscan API key
const ETHERSCAN_API_KEY = 'YourEtherscanAPIKey';

if (typeof window.ethereum !== 'undefined') {
    console.log('MetaMask is installed!');
    document.getElementById('status').innerText = 'MetaMask is installed!';
} else {
    alert('Please install MetaMask!');
}

// Variables
let account;
const connectButton = document.getElementById('connectButton');
const fetchTransactionsButton = document.getElementById('fetchTransactionsButton');

// Connect to MetaMask
async function connect() {
    try {
        const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
        account = accounts[0];
        document.getElementById('account').innerText = `Connected account: ${account}`;
        getBalance();
        fetchTransactionsButton.style.display = 'block';
    } catch (error) {
        console.error(error);
    }
}

// Get the balance of the connected account
async function getBalance() {
    const balance = await ethereum.request({
        method: 'eth_getBalance',
        params: [account, 'latest']
    });
    const ethBalance = parseFloat(ethers.utils.formatEther(balance)).toFixed(4);
    document.getElementById('balance').innerText = `Balance: ${ethBalance} ETH`;
}

// Fetch all transactions for the connected account
async function fetchTransactions() {
    try {
        const url = `https://api.etherscan.io/api?module=account&action=txlist&address=${account}&startblock=0&endblock=99999999&sort=asc&apikey=${ETHERSCAN_API_KEY}`;
        const response = await fetch(url);
        const data = await response.json();

        if (data.status === '1') {
            const transactions = data.result;
            displayTransactions(transactions);
        } else {
            alert('Error fetching transactions: ' + data.message);
        }
    } catch (error) {
        console.error(error);
    }
}

// Display the transactions in the UI
function displayTransactions(transactions) {
    const transactionsDiv = document.getElementById('transactions');
    transactionsDiv.innerHTML = '';

    transactions.forEach(tx => {
        const txElement = document.createElement('div');
        txElement.innerHTML = `
            <p><strong>Hash:</strong> ${tx.hash}</p>
            <p><strong>From:</strong> ${tx.from}</p>
            <p><strong>To:</strong> ${tx.to}</p>
            <p><strong>Value:</strong> ${ethers.utils.formatEther(tx.value)} ETH</p>
            <p><strong>Block Number:</strong> ${tx.blockNumber}</p>
            <p><strong>Timestamp:</strong> ${new Date(tx.timeStamp * 1000).toLocaleString()}</p>
            <hr>
        `;
        transactionsDiv.appendChild(txElement);
    });
}

// Event Listeners
connectButton.addEventListener('click', connect);
fetchTransactionsButton.addEventListener('click', fetchTransactions);
