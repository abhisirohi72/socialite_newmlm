import { ethers } from 'ethers';

// Get command line arguments
const address = process.argv[2];  // The address to verify the signature for
const message = process.argv[3];  // The message that was signed
const signature = process.argv[4];  // The signature

// Log the received values to debug
// console.log("Address:", address);
// console.log("Message:", message);
// console.log("Signature:", signature);

try {
    // Recover the signer address from the signature
    const recoveredAddress = ethers.verifyMessage(message, signature);

    // Compare the recovered address with the provided address
    if (recoveredAddress.toLowerCase() === address.toLowerCase()) {
        console.log(JSON.stringify({ success: true }));
    } else {
        console.log(JSON.stringify({ success: false, error: 'Invalid signature' }));
    }
} catch (error) {
    console.log(JSON.stringify({ success: false, error: error.message }));
}
