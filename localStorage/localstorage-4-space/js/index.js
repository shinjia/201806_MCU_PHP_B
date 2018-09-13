data = "m";
for (var i=0, data="m"; i<40; i++)
{
   try
   {
      localStorage.setItem("DATA", data);
      data = data + data;
   }
   catch(e)
   {
      var storageSize = Math.round(JSON.stringify(localStorage).length / 1024);
      console.log("LIMIT REACHED: (" + i + ") " + storageSize + "K");
      console.log(e);
      break;
   }
}

localStorage.removeItem("DATA");

// console.clear();
console.log('localStorage remariningSpace');
console.log(JSON.stringify(localStorage).length);