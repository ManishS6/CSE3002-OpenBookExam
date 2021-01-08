const MongoClient = require('mongodb').MongoClient;
// const url = "api-key";
MongoClient.connect(url,{useUnifiedTopology:true}, function(err, db) {
  if (err) throw err;
  var dbo=db.db("first");
  dbo.collection("a").findOne({}, function(err, res) {
    if (err) throw err;
    console.log(res.name);
    db.close();
  });
});